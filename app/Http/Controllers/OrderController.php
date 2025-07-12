<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 

 use App\Models\Order;

class OrderController extends Controller
{
    //

public function create()
{
    return view('order.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'medicine_name' => 'nullable|string',
        'prescription' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        'address' => 'required|string',
        'phone_number' => 'required|string',
        'patient_name' => 'required|string',
        'city' => 'required|string',
    ]);

    if ($request->hasFile('prescription')) {
        $data['prescription'] = $request->file('prescription')->store('prescriptions', 'public');
    }

    Order::create($data);

  return redirect()->route('order.admin.index')->with('success', 'Order submitted successfully!');

}
public function adminIndex()
{
    $orders = Order::all();
    return view('order.admin-index', compact('orders'));
}
public function edit($id)
{
    $order = Order::findOrFail($id);
    return view('order.edit', compact('order'));
}

public function update(Request $request, $id)
{
    $order = Order::findOrFail($id);

    $data = $request->validate([
        'patient_name' => 'required|string',
        'phone_number' => 'required|string',
        'city' => 'required|string',
        'medicine_name' => 'nullable|string',
        'address' => 'required|string',
        'prescription' => 'nullable|file|mimes:jpg,jpeg,png,pdf'
    ]);

    if ($request->hasFile('prescription')) {
        $data['prescription'] = $request->file('prescription')->store('prescriptions', 'public');
    }

    $order->update($data);

    return redirect()->route('order.admin.index')->with('success', 'Order updated successfully!');
}
public function destroy($id)
{
    $order = Order::findOrFail($id);

    // Delete prescription file if exists
    if ($order->prescription && \Storage::disk('public')->exists($order->prescription)) {
        \Storage::disk('public')->delete($order->prescription);
    }

    $order->delete();

    return redirect()->route('order.admin.index')->with('success', 'Order deleted successfully!');
}


public function updateStatus(Request $request, $id)
{
    $order = Order::findOrFail($id);
    $order->status = $request->status;
    $order->save();

    return redirect()->back()->with('success', 'Order status updated!');
}


}
