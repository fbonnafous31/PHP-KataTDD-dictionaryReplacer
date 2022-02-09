<?php

    namespace App;

    class DictionaryReplacer {


        public function replace(string $input, array $dict): string {
            $sentence = explode (" ", $input);
            $result = '';
            foreach ($sentence as $word) {
                $extract_word = $this->extract($word);  
                $new_word = '';
                foreach ($dict as $tab) {
                    if ($extract_word == $tab[0]) {
                        $new_word = $tab[1]; 
                    }                                
                }
                $result .= $this->rebuild_sentence ($word, $new_word);
            }
            return substr($result, 1, strlen($result)-1);
        }

        private function extract(string $value): string {
            $extract = '';
            if ((substr($value, 0, 2) == '\$') and (substr($value, -2) == '\$')) {
                $extract = substr($value, 2, strlen($value)-4);        
            } 
            return $extract;
        }

        private function rebuild_sentence (string $word, string $new_word): string {
            $result ='';
            if ($new_word == '') {
                $result = ' '.$word;
            } else {
                $result = ' '.$new_word;
            }
            return $result;
        }

    }

?>