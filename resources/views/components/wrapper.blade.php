<div class="card-body">
     <div class="row">
          <div class="col-lg-12">
               <div class="card card-transparent">
                    <div class="card-body no-padding">
                         <div id="card-advance" class="card card-default">
                              <div class="card-header">
                                   <div class="card-title">{{ $headerLeft ?? null }}</div>
                                   <div class="card-controls">{{ $headerRight ?? null }}</div>
                              </div>
                              <div class="card-body">
                                   <div class="card card-transparent">
                                        <div class="card-body">
                                             {{ $slot }}
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>