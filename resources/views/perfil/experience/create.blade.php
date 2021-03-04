@extends('sitelayout.layout')

@section('link')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

	<script type="text/javascript">
		$( function() {
			$( "#inicio" ).datepicker({
				format: 'dd/mm/yyyy',                
    			language: 'pt-BR'
			});
			$( "#fim" ).datepicker(
				format: 'dd/mm/yyyy',                
    			language: 'pt-BR'
			);
		});
	</script>
@endsection

@section('main-content')

	<section class="resume-section" id="interests">
	    <div class="resume-section-content">
	        <h2 class="mb-5">Adicionar Interesse</h2>
	        
	        <form>

	        	<div class="form-group">
	        		<label class="form-control-label">
	        			Função
	        		</label>
	        		<input type="text" name="nome" class="form-control">	
	        	</div>

	        	<div class="form-group">
	        		<label class="form-control-label">
	        			Empresa
	        		</label>
	        		<input type="text" name="nome" class="form-control">	
	        	</div>

	        	<div class="form-group row">
	        		<div class="form-group col-md-6">
	        			<label class="form-control-label">
	        				Início
	        			</label>
	        			<input type="text" name="inicio" class="form-control" id="inicio">		
	        		</div>
	        		<div class="form-group col-md-6">
	        			<label class="form-control-label">
	        				Fim
	        			</label>
	        			<input type="text" name="fim" class="form-control" id="fim">		
	        		</div>
	        	</div>

	        	<div class="form-group">
	        		<button class="btn btn-primary">Enviar</button>	
	        	</div>
	        	
	        </form>

	    </div>
	</section>

@endsection