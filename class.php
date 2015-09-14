<?php

	class CMV
	{		
		public function initJSON()
		{
			return get_object_vars( $this );
		}
	};
	
	class test_class extends CMV
	{
		protected $VARS = array();
		
		public function addVar( $name, $type, $def_value )
		{
			$VARS["$name"] = [ "v" => $def_value, "t" => $type ];
		}
		
		public function getVar( $name )
		{
			return $VARS["$name"];
		}
		
		public function setVar( $name, $val )
		{
			//TODO types check
			return $VARS["$name"] = $val;
		}
		
	}

	class test_class_OLD extends CMV //dislike
	{
		protected $the_int;
		protected $the_str;
		protected $the_arr;
		
		public function getInt(){ return $this->the_int->v; }
		public function getStr(){ return $this->the_str->v; }
		public function getArr(){ return $this->the_arr->v; }
		
		public function setInt( $new_int ){ $this->the_int->v = $new_int; }
		public function setStr( $new_str ){ $this->the_str->v = $new_str; }
		public function setArr( $new_arr ){ $this->the_arr->v = $new_arr; }
		
	}