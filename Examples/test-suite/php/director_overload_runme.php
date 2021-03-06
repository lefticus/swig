<?php

require "tests.php";
require "director_overload.php";

check::functions(array('new_overloadedClass','new_overloadedPointers','new_overloadedGetSet','overloadedclass_method1','overloadedclass_method3','overloadedclass_method2','overloadedpointers_method','overloadedpointers_notover','overloadedgetset_rw'));

check::classes(array('OverloadedClass','OverloadedPointers','OverloadedGetSet'));
check::globals(array());

$o = new OverloadedGetSet;
check::equal($o->rw(), 42, "get_set() initial value not 42");
check::equal($o->rw(7), null, "get_set() failed to set");
check::equal($o->rw(), 7, "get_set() didn't return back set value");

check::done();
