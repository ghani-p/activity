<?php

/*
 -------------------------------------------------------------------------
 Activity plugin for GLPI
 Copyright (C) 2013 by the Activity Development Team.
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Activity.

 Activity is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Activity is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Activity. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
*/

include ('../../../inc/includes.php');

Html::header_nocache ();
Session::checkLoginUser ();
header("Content-Type: text/html; charset=UTF-8");

if (isset($_POST['tickets_id']) && isset($_POST['tickettasks_id'])) {
   $ticketask = new PluginActivityTicketTask();
   switch ($_POST['action']) {
      case "showTicketTaskOnCra" :
         $ticketask->showCRAForm($_POST);
         break;
      case "showPlanningDuration":
         $ticketask->showPlanningDuration($_POST);
         break;
   }
}