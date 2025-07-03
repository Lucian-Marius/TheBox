<x-layout>

    <section>
    <x-heading>Welcome to the Box Placeholder</x-heading>
    </section>

    <section class="card-tags welcome">
        
            @foreach($tags as $tag)
                    <x-tag :$tag />
            @endforeach
     
        
    </section>

        <h4 class="search">Search bar placeholder</h4>
        
        <form action="" class="search-form">
            <input class="search-bar" type="text" placeholder="Search for ideas, concepts, or tags...">
            <button class="search-button" type="submit">Search</button>
        </form>


        <div class="x-card-container">
            @foreach ($concepts as $concept)
                <x-card :concept="$concept"></x-card>
                
            @endforeach
        </div>

  

        

    <section>
    <x-heading>Recent ideas</x-heading>

        <div class="x-card-container">
           @foreach ($concepts as $concept)
                <x-card :concept="$concept"></x-card>
            @endforeach    
        </div>
    </section>

 
        

</x-layout>

   





