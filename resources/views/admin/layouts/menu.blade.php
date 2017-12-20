<li class="{{ Request::is('admin/home') ? 'active' : '' }}">
    <a href="{!! route('admin.index') !!}"><i class="fa fa-edit"></i><span>Admin Home</span></a>
</li>

<li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
    <a href="{!! route('admin.users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('admin/stores*') ? 'active' : '' }}">
    <a href="{!! route('admin.stores.index') !!}"><i class="fa fa-edit"></i><span>Stores</span></a>
</li>

<li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
    <a href="{!! route('admin.products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('admin/products/need_review') ? 'active' : '' }}">
    <a href="{!! route('admin.products.list_unActive') !!}"><i class="fa fa-edit">  </i><span>--  Products need review</span></a>
</li>


<li class="{{ Request::is('admin/services*') ? 'active' : '' }}">
    <a href="{!! route('admin.services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('admin/reservations*') ? 'active' : '' }}">
    <a href="{!! route('admin.reservations.index') !!}"><i class="fa fa-edit"></i><span>Reservations</span></a>
</li>

<li class="{{ Request::is('admin/orders*') ? 'active' : '' }}">
    <a href="{!! route('admin.orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
    <a href="{!! route('admin.categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('admin/groups*') ? 'active' : '' }}">
    <a href="{!! route('admin.groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
</li>

{{-- <li class="{{ Request::is('sections*') ? 'active' : '' }}">
    <a href="{!! route('admin.sections.index') !!}"><i class="fa fa-edit"></i><span>Sections</span></a>
</li>
 --}}
<li class="{{ Request::is('admin/subscriptions*') ? 'active' : '' }}">
    <a href="{!! route('admin.subscriptions.browse') !!}"><i class="fa fa-edit"></i><span>Subscriptions</span></a>
</li>
<li class="{{ Request::is('plans*') ? 'active' : '' }}">
    <a href="{!! route('admin.plans.browse') !!}"><i class="fa fa-edit"></i><span>Plans</span></a>
</li>



<li class="{{ Request::is('admin/contact*') ? 'active' : '' }}">
    <a href="{!! route('admin.contact.inbox') !!}"><i class="fa fa-envelope-o"></i><span>Support Emails</span></a>
</li>

<li class="{{ Request::is('admin/tags*') ? 'active' : '' }}">
    <a href="{!! route('admin.tags.index') !!}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>
{{--
<li class="{{ Request::is('auctions*') ? 'active' : '' }}">
    <a href="{!! route('admin.auctions.index') !!}"><i class="fa fa-edit"></i><span>Auctions</span></a>
</li> --}}

{{-- <li class="{{ Request::is('bids*') ? 'active' : '' }}">
    <a href="{!! route('admin.bids.index') !!}"><i class="fa fa-edit"></i><span>Bids</span></a>
</li>
 --}}
<li class="{{ Request::is('admin/comments*') ? 'active' : '' }}">
    <a href="{!! route('admin.comments.index') !!}"><i class="fa fa-edit"></i><span>Comments</span></a>
</li>
{{--
<li class="{{ Request::is('favorites*') ? 'active' : '' }}">
    <a href="{!! route('admin.favorites.index') !!}"><i class="fa fa-edit"></i><span>Favorites</span></a>
</li>
 --}}
<li class="{{ Request::is('admin/files*') ? 'active' : '' }}">
    <a href="{!! route('admin.files.index') !!}"><i class="fa fa-edit"></i><span>Files</span></a>
</li>
{{--
<li class="{{ Request::is('followers*') ? 'active' : '' }}">
    <a href="{!! route('admin.followers.index') !!}"><i class="fa fa-edit"></i><span>Followers</span></a>
</li>

<li class="{{ Request::is('likes*') ? 'active' : '' }}">
    <a href="{!! route('admin.likes.index') !!}"><i class="fa fa-edit"></i><span>Likes</span></a>
</li>
 --}}
{{-- <li class="{{ Request::is('notifications*') ? 'active' : '' }}">
    <a href="{!! route('admin.notifications.index') !!}"><i class="fa fa-edit"></i><span>Notifications</span></a>
</li> --}}

{{-- <li class="{{ Request::is('offers*') ? 'active' : '' }}">
    <a href="{!! route('admin.offers.index') !!}"><i class="fa fa-edit"></i><span>Offers</span></a>
</li>
 --}}


<li class="{{ Request::is('admin/specs*') ? 'active' : '' }}">
    <a href="{!! route('admin.specs.index') !!}"><i class="fa fa-edit"></i><span>Specs</span></a>
</li>

{{-- <li class="{{ Request::is('productsSpecs*') ? 'active' : '' }}">
    <a href="{!! route('admin.productsSpecs.index') !!}"><i class="fa fa-edit"></i><span>ProductsSpecs</span></a>
</li>
 --}}
<li class="{{ Request::is('admin/reviews*') ? 'active' : '' }}">
    <a href="{!! route('admin.reviews.index') !!}"><i class="fa fa-edit"></i><span>Reviews</span></a>
</li>

<li class="{{ Request::is('admin/adverts*') ? 'active' : '' }}">
    <a href="{!! route('admin.adverts.index') !!}"><i class="fa fa-edit"></i><span>Adverts</span></a>
</li>

<li class="{{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a href="{!! route('admin.settings.index') !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('admin/pages*') ? 'active' : '' }}">
    <a href="{!! route('admin.pages.index') !!}"><i class="fa fa-edit"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('admin/geo*') ? 'active' : '' }}">
    <a href="{!! route('admin.geo.countries') !!}"><i class="fa fa-globe"></i><span>Geo</span></a>
</li>
