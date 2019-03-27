<?php
// update_options

function update_options() {
  global $option;
  global $sunya_options;
  // $option->delete_options();
  $option->save_options();
}