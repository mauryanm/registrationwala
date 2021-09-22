<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @for ($i=1; $i<=$totalindex; $i++)
  <sitemap>
    <loc>{{ url('/') }}/services/sitemap{{$i}}.xml</loc>
  </sitemap>
  @endfor
</sitemapindex>
