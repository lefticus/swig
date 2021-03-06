# do not dump Octave core
if exist("crash_dumps_octave_core", "builtin")
  crash_dumps_octave_core(0);
endif

multi_import_a;
multi_import_b;

x = multi_import_b.XXX();
if (x.testx() != 0)
  error("failed");
endif

y = multi_import_b.YYY();
if (y.testx() != 0)
  error("failed");
endif
if (y.testy() != 1)
  error("failed");
endif

z = multi_import_a.ZZZ();
if (z.testx() != 0)
  error("failed");
endif
if (z.testz() != 2)
  error("failed");
endif

