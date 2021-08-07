<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}/legal-docs</loc>
        <lastmod>2021-07-27 18:32:03</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($legaldocs as $doc)
        <url>
            <loc>{{ url('/') }}/legal-docs/{{$doc->slug}}</loc>
            <lastmod>{{ $doc->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @if($doc->docdetail)
        <url>
            <loc>{{ url('/') }}/legal-docs/{{$doc->slug}}/edit</loc>
            <lastmod>{{ $doc->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endif
    @endforeach
</urlset>