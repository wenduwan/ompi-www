[root@amd-istanbul-24 tests]# ./hwloc_bind 
system set is 0x00ffffff
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK

now strict
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK

obj set is 0x0000003f
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK

now strict
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK

singlified to 0x00000001
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK

now strict
Bind this singlethreaded process        : OK
Get  this singlethreaded process        : OK
Bind this thread                        : OK
Get  this thread                        : OK
Bind this whole process                 : OK
Get  this whole process                 : OK
Bind whole process                      : OK
Get  whole process                      : OK
Bind process                            : OK
Get  process                            : OK
Bind thread                             : OK
Get  thread                             : OK



memory tests

complete node set
i.e. cpuset 0x00ffffff
  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00ffffff, got 0x0000003f
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00ffffff, got 0x0000003f
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

now strict

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

now migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00ffffff, got 0x0000003f
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00ffffff, got 0x0000003f
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

now strictly migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

cpuset set is 0x0000003f
  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

now strict

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

now migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

now strictly migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x0000003f, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x0000003f, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

cpuset set is 0x00000fff
  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x0000003f
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x0000003f
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : OK
Get   bound area                        : XFAILED (38, Function not implemented)
Free  bound area                        : OK

now strict

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : FAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)
Alloc bound area                        : XFAILED (38, Function not implemented)

now migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x0000003f
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x0000003f
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

now strictly migrate

  default
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  firsttouch
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : expected 0x00000fff, got 0x00ffffff
Bind this thread memory                 : OK
Get  this thread memory                 : expected 0x00000fff, got 0x00ffffff
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  bound
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  interleave
Bind this singlethreaded process memory : OK
Get  this singlethreaded process memory : OK
Bind this thread memory                 : OK
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : OK
Get  area                               : XFAILED (38, Function not implemented)

  replicate
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)

  nexttouch
Bind this singlethreaded process memory : XFAILED (38, Function not implemented)
Get  this singlethreaded process memory : OK
Bind this thread memory                 : XFAILED (38, Function not implemented)
Get  this thread memory                 : OK
Bind this whole process memory          : XFAILED (38, Function not implemented)
Get  this whole process memory          : XFAILED (38, Function not implemented)
Bind process memory                     : XFAILED (38, Function not implemented)
Get  process memory                     : XFAILED (38, Function not implemented)
Bind area                               : XFAILED (38, Function not implemented)
Get  area                               : XFAILED (38, Function not implemented)


