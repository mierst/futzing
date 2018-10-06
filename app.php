#!/usr/bin/env php
<?php
#
# Input: List of roles, and SR
# Sort by date registered then by SR
# Start filling teams (2-2-2) through each list -- no more than 16 teams, no fewer than 8
# * Can you have secondary roles (like LFG?)

$csv = array_map('str_getcsv', file('list.csv'));

print_r($csv);


?>
