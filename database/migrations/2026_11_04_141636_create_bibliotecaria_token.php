    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('bibliotecaria_token', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('bibliotecaria_id');
                $table->foreign('bibliotecaria_id')->references('id')->on('bibliotecaria')->onDelete('cascade');
                $table->text('token');
                $table->timestamp('valido_ate');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('bibliotecaria_token', function (Blueprint $table) {
                $table->dropForeign(['bibliotecaria_id']);
            });
            Schema::dropIfExists('bibliotecaria_token');
        }
    };

