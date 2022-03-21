


    public function edit(Request $request)
    {
                $param = ['id' => $request->id];
        $item = DB::select('select * from todos where id = :id', $param);
        return view('edit', ['form' => $todo]);
    }
    public function update(Request $request)
    {
         $param = [
            'id' => $request->id,
            'content' => $request->content,
        ];
        DB::update('update todos set content =:content where id =:id', $param);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from todos where id = :id', $param);
        return view('delete', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from todos where id =:id', $param);
        return redirect('/');
    }

}
