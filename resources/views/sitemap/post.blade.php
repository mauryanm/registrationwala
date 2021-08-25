<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}/knowledge-base</loc>
        <lastmod>2017-12-29</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $category)
        <url>
            <loc>{{ url('/') }}/knowledge-base/{{$category->slug}}</loc>
            <lastmod>{{ $category->created_at->format('Y-m-d') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @foreach ($category->postservices as $service)
        <url>
            <loc>{{ url('/') }}/knowledge-base/{{$category->slug}}/{{$service->slug}}</loc>
            <lastmod>{{ $service->created_at->format('Y-m-d') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @foreach ($service->allpost as $post)
        <url>
            <loc>{{ url('/') }}/knowledge-base/{{$category->slug}}/{{$service->slug}}/{{$post->slug}}</loc>
            @if($post->publish_date)
            <lastmod>{{ date('Y-m-d',strtotime($post->publish_date)) }}</lastmod>
            @endif
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach
        @endforeach
    @endforeach
</urlset>