<link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<div class="bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold text-green-500">Welcome</h1>
        <p class="py-6 font-bold text-4xl">Purchase yourself a ticket</p>
      </div>
    </div>
  </div>

<div class="flex flex-row spacing-x-12">
<div class="stats shadow mt-8 mx-32">
  
    <div class="stat place-items-center">
      <div class="stat-title">Purchases</div>
      <div class="stat-value">50K</div>
      <div class="stat-desc">From January 1st to February 1st</div>
    </div>
    
    <div class="stat place-items-center">
      <div class="stat-title">Available</div>
      <div class="stat-value text-secondary">20,200</div>
      <div class="stat-desc text-secondary">↗︎ 40 (2%)</div>
    </div>
    
    <div class="stat place-items-center">
      <div class="stat-title">New Buyers</div>
      <div class="stat-value">11,200</div>
      <div class="stat-desc">↘︎ 90 (14%)</div>
    </div>
    

    
  <div class="form-control">
    <label class="label">
      <span class="label-text">Enter amount to purchase a ticket</span>
    </label>
    <label class="input-group">
      <span>Price</span>
      <input type="text" placeholder="2$" class="input input-bordered" />
      <span>USD</span>
    </label>
  </div>
  </div>
</div>

<div class="flex flex-row md-w-1/3 mx-12 mt-12">
<div class="card w-96 bg-base-100 shadow-xl image-full mx-4">
    <figure><img src="images/ladie.png" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title">VVIP ticket</h2>
      <p>12$ 00CNT $$</p>
      <div class="card-actions justify-end">
        <a href="/purchase">
        <button class="btn btn-primary">Purchase</button>
      </a>
      </div>
    </div>
  </div>

  <div class="card w-96 bg-base-100 shadow-xl image-full mx-4">
    <figure><img src="images/pass.png" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title">VIP ticket</h2>
      <p>8$ 00CNT $$</p>
      <div class="card-actions justify-end">
        <a href="/purchase">
        <button class="btn btn-primary">Purchase</button>
      </a>
      </div>
    </div>
  </div>

  <div class="card w-96 bg-base-100 shadow-xl image-full mx-4">
    <figure><img src="images/man.png" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title">Regular ticket</h2>
      <p>5$ 00CNT $$</p>
      <div class="card-actions justify-end">
        <a href="/purchase">
        <button class="btn btn-primary">Purchase</button>
      </a>
      </div>
    </div>
  </div>
</div>

@include('users.footer')

            
