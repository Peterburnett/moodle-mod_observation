<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains functions to get various observation data objects
 *
 * @package   mod_observation
 * @copyright  2021 Endurer Solutions Team
 * @author Celine Lindeque
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_observation\filter;

use moodle_text_filter;

defined('MOODLE_INTERNAL') || die();

/**
 * mod_observation observation management class
 *
 * @package   mod_observation
 * @copyright  2021 Endurer Solutions Team
 * @author Celine Lindeque
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class filter_media extends moodle_text_filter{
    
    public function filter(){
        return;
    }

    public function filter_image($mediaResponse){
        return str_replace('world', 'hello world!', $mediaResponse);
    }

}
