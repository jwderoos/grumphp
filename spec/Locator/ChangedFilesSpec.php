use GrumPHP\Git\GitRepository;
use GrumPHP\Util\Paths;
    function let(GitRepository $repository, Filesystem $filesystem, Paths $paths)
        $this->beConstructedWith($repository, $filesystem, $paths);
        $paths->makePathRelativeToProjectDir(Argument::type('string'))->will(
    function it_will_list_all_diffed_files(GitRepository $repository, Filesystem $filesystem, Diff $diff, WorkingCopy $workingCopy)
    function it_will_not_list_non_existing_files(GitRepository $repository, Filesystem $filesystem, Diff $diff, WorkingCopy $workingCopy)
    function it_will_list_all_diffed_files_from_raw_diff_input(GitRepository $repository, Filesystem $filesystem)
        $repository->createRawDiff($rawDiff)->willReturn(Diff::parse($rawDiff));