package com.example.tugasgaje

class ApiEndPoint {
    companion object{
        private val SERVER = "http://192.168.43.138/universitaskotlin"
        val  CREATE = SERVER+"create_fakulas.php"
        val  READ = SERVER+"read_fakultas.php"
        val UPDATE = SERVER+"fakultas_update.php"
        val DELETE = SERVER+"fakultas_delete.php"
    }

}