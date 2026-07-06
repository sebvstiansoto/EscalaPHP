<?php

declare(strict_types=1);

namespace Tests;

use App\Services\SearchService;
use PHPUnit\Framework\TestCase;

class SearchServiceTest extends TestCase
{
    public function testFindsPythonCourse(): void
    {
        $results = (new SearchService())->search('python');
        $types = array_column($results, 'type');
        $this->assertContains('course', $types);
    }

    public function testEmptyQueryReturnsEmpty(): void
    {
        $this->assertSame([], (new SearchService())->search(''));
        $this->assertSame([], (new SearchService())->search('a'));
    }
}
