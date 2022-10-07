<?php

namespace App\Console\Commands;

use App\MediaGallery;
use GuzzleHttp\Psr7\MimeType;
use Illuminate\Console\Command;
use Storage;

class MediaSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'media:DBsync {disk} {fetch?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Media Files needs disk name {disk : fileSystem disk name} {fetch: default is true}';

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
        $Diskfiles = Storage::disk($this->argument('disk'))->allFiles();
        $DBfiles = MediaGallery::all(['storage_name'])->pluck('storage_name')->toArray();
        $bar = $this->output->createProgressBar(count($Diskfiles));

        // $this->info($this->getArguments());
        // dd($this->arguments());

        foreach ($Diskfiles as $key => $value) {
            if (!in_array($value, $DBfiles)) {
                $mine =  MimeType::fromFilename($value);
                $extension = \explode('/', $mine)[0];
                $media = new MediaGallery();
                $media->type = ($extension == "image" || $extension == "video" || $extension == "audio") ? $extension : explode('.', $value)[1];
                $media->alt = 'File ' . ($key + 1);
                $media->storage_name = $value;
                if (!$this->argument('fetch'))
                    $media->file_size = Storage::disk($this->argument('disk'))->size($value) / 1024;
                else
                    $media->file_size = 0;

                $media->save();
            }
            $bar->advance();
        }
        $bar->finish();
    }
}
