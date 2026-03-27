<?php

namespace Tests\Feature;

use Tests\TestCase;

class CsrfFrontendTest extends TestCase
{
    public function test_login_page_sets_a_plain_xsrf_cookie_for_the_spa(): void
    {
        $response = $this->get('/login');

        $xsrfCookie = collect($response->headers->getCookies())
            ->first(fn ($cookie) => $cookie->getName() === 'XSRF-TOKEN');

        $this->assertNotNull($xsrfCookie, 'The XSRF-TOKEN cookie was not set.');
        $this->assertSame(session()->token(), $xsrfCookie->getValue());
    }

    public function test_419_page_shows_recovery_instructions(): void
    {
        $html = view('errors.419')->render();

        $this->assertStringContainsString('Session expired', $html);
        $this->assertStringContainsString('Go back to the previous page and refresh it.', $html);
        $this->assertStringContainsString('Go To Login', $html);
    }
}
