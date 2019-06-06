<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    {{-- @php the_content() @endphp --}}}
    
    @if ( have_rows('featured_products') )

      @while( have_rows('featured_products') )

        @foreach (the_row() as $row)
            {{the_sub_field('featured_product_title')}}
            <img src={{the_sub_field('featured_product_image')}} alt="">
        @endforeach
        
      @endwhile

    @endif
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
