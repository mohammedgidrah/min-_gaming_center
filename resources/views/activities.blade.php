 @extends('index')
 @section('title', 'Activities')
 @section('content')

      <!-- Page Start Banner Area Start -->
      <div class="page-title-banner p-64" id="activities-padding">
 
      </div>
      <!-- Page Start Banner Area End -->

      <!-- Main Content Start -->
      <div class="page-content">
        <!-- Tournament Area Start -->
        <section class="tournaments p-40">
          <div class="container">
            <div class="tab-list">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    data-bs-toggle="tab"
                    data-bs-target="#all"
                    type="button"
                    role="tab"
                  >
                    ALL
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#pubg"
                    type="button"
                    role="tab"
                  >
                    Pc's
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#dota-2"
                    type="button"
                    role="tab"
                  >PlayStation</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#fortnite"
                    type="button"
                    role="tab"
                  >
                    name
                  </button>
                </li> --}}
                {{-- <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    data-bs-toggle="tab"
                    data-bs-target="#cs-go"
                    type="button"
                    role="tab"
                  >
                    name
                  </button>
                </li> --}}
              </ul>
            </div>
            <div class="tab-content">
              <div id="all" class="tab-pane fade show pt-48 active">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/FiveM.jpeg"
                        alt=""
                        
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                          
                            FiveM
                          
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div> --}}
                          {{-- <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
             
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Forza Horizon 5.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                          <a  >
                           Forza Horizon 5</a
                          >
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div> --}}
                          {{-- <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
               
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-3">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Fortnite.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                        
                           Fortnite
                           
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Counter-Strike 2.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                           
                            Counter-Strike 2
                          
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 > Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-1">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Grand Theft Auto V (Steam Edition).jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 20px">
                       Grand Theft Auto V (Steam Edition)
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Roblox.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                        Roblox
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-3">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Valorant.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Valorant
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 > Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/The Last of Us Part III.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      The Last of Us Part III

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/God of War Ragnarok II.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      God of War: Ragnarok II


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Marvel’s Spider-Man 2.jpeg"
                        alt=""
                        style="border-radius: 10px;"
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Marvel’s Spider-Man 2


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Horizon Forbidden West Burning Shores.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 17px">
                     Horizon Forbidden West: Burning Shores

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Assassin’s Creed Mirage.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Assassin’s Creed Mirage


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/FIFA 25 (أحدث نسخة من فيفا).jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      FIFA 25 (أحدث نسخة من فيفا)

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Call of Duty Modern Warfare 3.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 21px">
                     Call of Duty: Modern Warfare 3


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Battlefield 2042.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Battlefield 2042

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Gran Turismo 7.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                     Gran Turismo 7


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Fortnite.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                    Fortnite


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="pubg" class="tab-pane fade pt-48">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-1">
                      <img
                        class="t-logo"
                        src="assets/media/logos/FiveM.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       FiveM
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-1">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Forza Horizon 5.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       Forza Horizon 5
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-1">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Fortnite.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Fortnite
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-1">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Counter-Strike 2.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Counter-Strike 2

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                 
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Grand Theft Auto V (Steam Edition).jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 20px">
                      Grand Theft Auto V (Steam Edition)
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Roblox.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       Roblox
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-2">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Valorant.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       Valorant
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Pc's</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="dota-2" class="tab-pane fade pt-48">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/The Last of Us Part III.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      The Last of Us Part III

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/God of War Ragnarok II.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      God of War: Ragnarok II


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Marvel’s Spider-Man 2.jpeg"
                        alt=""
                        style="border-radius: 10px;"
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Marvel’s Spider-Man 2


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Horizon Forbidden West Burning Shores.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 17px">
                     Horizon Forbidden West: Burning Shores

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Assassin’s Creed Mirage.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Assassin’s Creed Mirage


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/FIFA 25 (أحدث نسخة من فيفا).jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      FIFA 25 (أحدث نسخة من فيفا)

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Call of Duty Modern Warfare 3.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24" style="font-size: 21px">
                     Call of Duty: Modern Warfare 3


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Battlefield 2042.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      Battlefield 2042

                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Gran Turismo 7.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                     Gran Turismo 7


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/Fortnite.jpeg"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                    Fortnite


                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >Playstation</h6>
                          </div>
                          {{-- <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div> --}}
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="fortnite" class="tab-pane fade pt-48">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-3">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-3.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-3">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-4.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                          name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-3">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-4.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                     name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="cs-go" class="tab-pane fade pt-48">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-3.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                      name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-4.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                       name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="tournament-card mb-30 b-4">
                      <img
                        class="t-logo"
                        src="assets/media/logos/tl-4.png"
                        alt=""
                      />
                      <div class="text-block">
                        <h4 class="mb-24">
                        name
                        </h4>
                        <div class="info mb-32">
                          <div class="block">
                            <img src="assets/media/icons/ti-1.png" alt="" />
                            <h6 >A-Tier</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/dollar.png" alt="" />
                            <h6 >$50,000</h6>
                          </div>
                          <div class="block">
                            <img src="assets/media/icons/aim.png" alt="" />
                            <h6 >South Asia</h6>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Tournament Area End -->
      </div>

      <!-- Main Content End -->

    @endsection

    <style>
.t-logo {
    width: 125px;       /* square width */
    height: 125px;      /* square height */
    object-fit: contain; /* fill square, crop if needed */
    display: block;
     border-radius: 8px; /* optional rounded corners */
}

@media (max-width: 768px) {
    .t-logo {
        width: 60px;
        height: 60px;
    }
}


</style>
