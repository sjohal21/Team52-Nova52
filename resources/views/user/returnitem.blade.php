<!-- TODO: create page to process an item return -->
<x-layout>
    <x-slot:title>
        Return item
    </x-slot:title>
    <div class="p-5 m-5">
        <form method="post" action="{{URL::to("/user/orders/returnItem/{$item->id}")}}">
            <fieldset>
                <input type="radio" id="faultyDamaged" name="reasonReturn">
                <label for="faultyDamaged">Faulty/damaged item</label><br>
                <input type="radio" id="notAsDescribed" name="reasonReturn">
                <label for="notAsDescribed">Not as described</label><br>
                <input type="radio" id="wrongItem" name="reasonReturn">
                <label for="wrongItem">Wrong item</label><br>
                <input type="radio" id="changedMind" name="reasonReturn">
                <label for="changedMind">Changed my mind</label><br>
                <label for="otherReason">Other (specify): </label>
                <input type="text" id="otherReason" name="reasonReturn" class="input">
            </fieldset>
            @csrf
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>
