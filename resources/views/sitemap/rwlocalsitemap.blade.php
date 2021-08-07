<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($services->whereNotIn('slug',$exept) as $service)
    @foreach($cities as $city)
        <url>
            <loc>{{ url('/') }}/{{$service->slug}}/{{$city->slug}}</loc>
            <lastmod>{{ $service->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        @if($service->slug=='copyright-registration')
        @foreach ($exept as $exp)
        <url>
            <loc>{{ url('/') }}/copyright-registration/{{$exp}}/{{$city->slug}}</loc>
            <lastmod>{{ $service->created_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
        
        @endforeach
        @endif
    @endforeach
    @endforeach
</urlset>