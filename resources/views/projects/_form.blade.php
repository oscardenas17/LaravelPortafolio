@csrf   

        <label for="">Título del proyecto <br>
            <input type="text" name="title" value="{{ old('title', $project->title) }}">
        </label><br>

        <label for="">URL del pryecto<br>
            <input type="text" name="url"  value="{{ old('url',$project->url) }} ">
        </label><br>

        <label for="">Descripción <br>
            <textarea type="text" name="description" >{{ old('description',$project->description) }}</textarea>
        </label><br>

        <button>
        {{$btnText}}
        </button>