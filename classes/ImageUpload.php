<?php
declare(strict_types=1);

namespace classes;

use models\ImageModel;
require 'Images.php';

class ImageUpload extends Images
{
    private string $image_type;
    private int $image_size;
    private string $image_temp;
    private string $uploads_folder = "./uploads/";
    private array $allowed_image_types = ["image/jpeg", "image/jpg", "image/png"];
    private int $upload_max_size = 2*1024*1024;
    public ?string $error;

    /**
     * @param ImageModel $image_model
     * @param Effects $effects
     * @param array $image
     * @param string $effect_type
     * @param array $effect_settings
     */
    public function __construct(ImageModel $image_model, Effects $effects, array $images, string $effect_type, array $effect_settings){

        parent::__construct($image_model);
        
        foreach($images as $image)

            //image properties
            $this->image_name = $image['image']['name'];
            $this->image_size = $image['image']['size'];
            $this->image_temp = $image['image']['tmp_name'];
            $this->image_type = $image['image']['type'];

            $this->isImage();
            //$this->sizeValidation();

            //if there are no errors
            if($this->error == null){
                $this->moveFile();
                $effects->setImage($this->uploads_folder . $this->image_name);
                $effects->setEffectType($effect_type);
                $effects->applyEffect($effect_settings);
            }
        
        }

    }

    /**
     * @return string|null
     */
    public function isImage(): ?string {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $this->image_temp);
        if(!in_array($mime, $this->allowed_image_types)){
            return $this->error = "Only .jpg,.jpeg,.png files are allowed";
        }
        finfo_close($finfo);
        return null;
    }

    /**
     * @return string|null
     */
    public function sizeValidation(): ?string {
        if($this->image_size > $this->upload_max_size){
            return $this->error = "File is bigger than 2MB";
        }
        return null;
    }

    /**
     * @return string
     */
    public function moveFile(): string {
        if(!move_uploaded_file($this->image_temp, $this->uploads_folder.$this->image_name)){
            return $this->error = "There was an error, please try again";
        }
        return "File Uploaded Successfully";
    }
}

