<?php

namespace App\Console\Commands;

use App\MediaGallery;
use File;
use GuzzleHttp\Psr7\MimeType;
use Illuminate\Console\Command;
use Storage;
use Throwable;

class SetMediaType extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'media:types';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genartes Types for Media Gallery';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $media = MediaGallery::select('id', 'storage_name')->get();
        $bar = $this->output->createProgressBar(count($media));

        foreach ($media as $key => $value) {
            try {
                // $this->line('Calculating mime for file ' . $value->storage_name);
                $mine =  MimeType::fromFilename($value->storage_name);
                $extension = \explode('/', $mine)[0];
                $value->type = ($extension == "image" || $extension == "video" || $extension == "audio") ? $extension : explode('.', $value->storage_name)[1];
                $value->save();
            } catch (Throwable $e) {
                $this->error($value);
            }
            $bar->advance();
        }
        $bar->finish();
        $this->newLine();
        $this->info('Successfully calculated mime types.');
    }
}
