<?php
    namespace HolaMundoMultilenguaje;

    class Saludo{
        private $saludos;
        public function __construct(){
            $this->saludos = [
                "es" => ["saludo" => "¡Hola Mundo!", "codigo" => "ES"],
                "zh" => ["saludo" => "问世界安!", "codigo"=> "CN"],
                "en" => ["saludo" => "Hello World!", "codigo"=> "US"],
                "hi" => ["saludo" => "नमस्ते दुनिया!", "codigo"=> "IN"],
                "ar" => ["saludo" => "مرحبا بالعالم!", "codigo"=> "AR"],
                "pt" => ["saludo" => "Olá, mundo!", "codigo"=> "PT"],
                "ru" => ["saludo" => "Всем привет!", "codigo"=> "RU"],
                "ja" => ["saludo" => "こんにちは、世界！", "codigo"=> "JP"],
                "de" => ["saludo" => "Hallo Welt!", "codigo"=> "DE"],
                "fr" => ["saludo" => "Salut tout le monde!!", "codigo"=> "FR"]
            ];
        }

        public function generarSaludoAleatorio(){
            $indice = array_rand($this->saludos);
            return $this->saludos[$indice];
        }
    }