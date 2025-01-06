@extends('template')

@section('contenue')
<div class="container mt-5">
    <h2>Mes commandes</h2>

    @if ($commandes->isEmpty())
    <p>Aucune commande à afficher.</p>
    @else
    <div class="list-group">
        @foreach ($commandes as $commande)
        <div class="list-group-item">
            <h5 class="mb-1">
                Commande #{{ $commande->id }}
                @if ($commande->etat === 'courant')
                <span class="badge bg-success">Courante</span>
                @else
                <span class="badge bg-secondary">Archivée</span>
                @endif
            </h5>
            <div class="d-flex justify-content-between">
                <small>{{ $commande->created_at->format('d/m/Y H:i') }}</small>
                <div>
                    @if ($commande->etat === 'courant')
                    <a href="{{ route('commandes.show', $commande) }}" class="btn btn-primary btn-sm">Visualiser</a>
                    <form action="{{ route('commandes.annuler', $commande) }}" method="POST" style="display: inline-block;">
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?')">Annuler</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
