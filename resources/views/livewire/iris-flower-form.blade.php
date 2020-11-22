<div>
    <p>Enter flower details on the left and see the prediction on the left update.</p>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="petal_length">Petal length</label>
                <input wire:model="flower.petal_length" class="form-control" id="petal_length" type="number" step="0.1" />
            </div>

            <div class="form-group">
                <label for="petal_width">Petal width</label>
                <input wire:model="flower.petal_width" class="form-control" id="petal_width" type="number" step="0.1" />
            </div>

            <div class="form-group">
                <label for="sepal_length">Sepal length</label>
                <input wire:model="flower.sepal_length" class="form-control" id="sepal_length" type="number" step="0.1" />
            </div>

            <div class="form-group">
                <label for="sepal_width">Sepal width</label>
                <input wire:model="flower.sepal_width" class="form-control" id="sepal_width" type="number" step="0.1" />
            </div>

            <p>Not sure what the sepal is? Take a look at the diagram below.</p>

            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7f/Mature_flower_diagram.svg" class="w-100" alt="Flower diagram"/>

        </div>

        <div class="col">

            <div class="form-group">
                <label for="species">
                    Species prediction <span wire:loading> - Loading...</span>
                </label>
                <input class="form-control" id="species" readonly value="{{ $flower->species ? 'Iris '.ucfirst($flower->species) : 'Unknown' }}" />
            </div>

            @if($flower->species)
                @switch($flower->species)
                    @case('setosa')
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Kosaciec_szczecinkowaty_Iris_setosa.jpg" class="w-100" alt="Iris Setosa" />
                        @break

                    @case('versicolor')
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Iris_versicolor_3.jpg" class="w-100" alt="Iris Veriscolor" />
                        @break

                    @case('virginica')
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Iris_virginica.jpg" class="w-100" alt="Iris Virginica" />
                        @break
                @endswitch
            @endif

        </div>

    </div>
</div>
