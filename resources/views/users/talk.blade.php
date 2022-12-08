<link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<div class="overflow-x-auto w-full">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>
            <label>
              {{-- <input type="checkbox" class="checkbox" /> --}}
            </label>
          </th>
          <th>Name</th>
          <th>Job</th>
          <th>Details</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        <tr>
          <th>
            <label>
              {{-- <input type="checkbox" class="checkbox" /> --}}
            </label>
          </th>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                  <img src="images/man.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">Hart Hagerty</div>
                <div class="text-sm opacity-50">United States</div>
              </div>
            </div>
          </td>
          <td>
            Zemlak, Daniel and Leannon
            <br/>
            <span class="badge badge-ghost badge-sm">Lecturer in Havard university</span>
          </td>
          {{-- <td>Purple</td> --}}
          <th>
            <li>
              <a href="/details">details</a>
            </li>
            {{-- <button class="btn btn-ghost btn-xs">details</button> --}}
          </th>
        </tr>
        <!-- row 2 -->
        <tr>
          <th>
            <label>
              {{-- <input type="checkbox" class="checkbox" /> --}}
            </label>
          </th>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                  <img src="images/pass.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">Brice Swyre</div>
                <div class="text-sm opacity-50">China</div>
              </div>
            </div>
          </td>
          <td>
            Carroll Group
            <br/>
            <span class="badge badge-ghost badge-sm">Tax Accountant</span>
          </td>
          {{-- <td>Red</td> --}}
          <th>
            <li>
              <a href="/details">details</a>
            </li>
            {{-- <button class="btn btn-ghost btn-xs">details</button> --}}
          </th>
        </tr>
    
        <!-- row 3 -->
        <tr>
          <th>
            <label>
              {{-- <input type="checkbox" class="checkbox" /> --}}
            </label>
          </th>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                  <img src="images/ladie.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">Yancy Tear</div>
                <div class="text-sm opacity-50">Brazil</div>
              </div>
            </div>
          </td>
          <td>
            Wyman-Ledner
            <br/>
            <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
          </td>
          {{-- <td>Indigo</td> --}}
          <th>
            <li>
              <a href="/details">details</a>
            </li>
            {{-- <button class="btn btn-ghost btn-xs">details</button> --}}
          </th>
        </tr>
      </tbody>
      <!-- foot -->
    </table>
  </div>