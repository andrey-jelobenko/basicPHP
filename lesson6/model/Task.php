<?php
 class Task
 {
     private string $description;

     public function __construct(string $description)
     {
         $this->description = $description;
     }

     public function getDescription(): string
     {
         return $this->description;
     }

 }