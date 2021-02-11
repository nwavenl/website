<div style="font-family: sans-serif">
    <h2>Mail van {{ $data['fname'] }}  {{ $data['lname'] }}</h2>
    <h3>type: {{ $data['type'] }}</h3>
    <h4>Email: {{ $data['email'] }}</h4>
    <h4>Nummer: {{ $data['phone'] }}</h4>
    <h4>Bedrijf: {{ $data['company'] }}</h4>
    <h4>budget: {{ $data['budget'] }}</h4>
    <br>
    <p>{{ $data['message'] }}</p>
</div>
