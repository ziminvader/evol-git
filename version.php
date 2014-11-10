<?php
// This file is part of CorrectWriting question type - https://code.google.com/p/oasychev-moodle-plugins/
//
// CorrectWriting question type is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CorrectWriting is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'qtype_correctwriting';
$plugin->version  = 2014071000;
$plugin->requires = 2013110500;
$plugin->release = 'Correct Writing 2.6 Beta';
$plugin->maturity = MATURITY_BETA;

$plugin->dependencies = array(
    'qtype_shortanswer' => 2013050100,
    'qbehaviour_adaptivehints' => 2014071000,
    'qbehaviour_adaptivehintsnopenalties' => 2014071000,
    'qbehaviour_interactivehints' => 2014071000,
    'qtype_poasquestion' => 2014071000,
    'block_formal_langs' => 2014071000
);