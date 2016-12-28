<?php
if ( ! function_exists( 'model' ) ) {
	/**
	 * 生成模型对象
	 *
	 * @param $model
	 *
	 * @return mixed
	 */
	function model( $model ) {
		static $instance = [ ];
		$class = strpos( $model, '\\' ) === false ? '\system\model\\' . ucfirst( $model ) : $model;
		if ( isset( $instance[ $class ] ) ) {
			return $instance[ $class ];
		}

		return $instance[ $class ] = new $class;
	}
}