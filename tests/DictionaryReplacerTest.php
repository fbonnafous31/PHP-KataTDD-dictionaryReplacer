<?php

use App\DictionaryReplacer;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

    class DictionaryReplacerTest extends TestCase {

        public function setup(): void {
            $this->dc = new DictionaryReplacer();
        }

        //input : “”, dict empty, output:“”
        public function testIfinputAndDictAreNullOutputIsNull() {
            assertEquals('', $this->dc->replace('', array(['', ''])));
        }

        //input : “\$temp\$“, dict [“temp”, “temporary”], output: “temporary”
        public function testIfinputEqualtempAndDictEqualtempReturntemporary() {
            assertEquals('temporary', $this->dc->replace('\$temp\$', array(['temp', 'temporary'])));
        }

        //input : “\$temp\$ here comes the name \$name\$“, dict [“temp”, “temporary”] [“name”, “John Doe”], output : “temporary here comes the name John Doe”
        public function testIfInputsReturnSentence1 () {
            assertEquals('temporary here comes the name John Doe', $this->dc->replace('\$temp\$ here comes the name \$name\$', array(['temp', 'temporary'], ['name', 'John Doe'])));
        }

        //input : “En ce moment \$nom\$ mange des \$fruit\$ dans le \$lieu\$“, dict [“nom”, “François”] [“fruit”, “myrtilles”] [“lieu”, “jardin”], output : “En ce moment François mange des myrtilles dans le jardin“
        public function testIfInputsReturnSentence2 () {
            assertEquals('En ce moment François mange des myrtilles dans le jardin', $this->dc->replace('En ce moment \$nom\$ mange des \$fruit\$ dans le \$lieu\$', array(['nom', 'François'], ['fruit', 'myrtilles'], ['lieu', 'jardin'])));
        }
        
    }

?>