<style>
    header {
        background: rgba(16,16,16,0.8);
        padding-block: 4px;
        margin-block: -6px;
        margin-inline: -6px;
    }
    nav p {
       font-family: Arial, Helvetica, sans-serif;
       font-size: 20px;
       padding-inline: 20px;
    }
    nav p a {
        color: lemonchiffon; 
        text-decoration: none;
        padding-inline: 10px;
        padding-block: 10px;
        margin-inline: -4px;   
    }
    nav:hover {
        background-color:orange;
        padding-block: 10px;
        padding-inline: 10px;
    }
    
</style>

<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products')}}">Productos</a>
            <a href="{{route('clients')}}">Clientes</a>
            <a href="{{route('sales')}}">Ventas</a>
        </p>
    </nav>
</header>   
<br>