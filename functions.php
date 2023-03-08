<?php
function meta_box() {
    add_meta_box(
        'form1_box',
        'メインビジュアル説明',
        'form1_box',
        'dashboard',
        'normal',
        'default'
    );
    add_meta_box(
        'form2_box',
        'サークル情報',
        'form2_box',
        'dashboard',
        'normal',
        'default'
    );
    add_meta_box(
        'form3_box',
        'ギャラリーの設定',
        'form3_box',
        'dashboard',
        'normal',
        'default'
    );
    add_meta_box(
        'form4_box',
        'SNSの設定',
        'form4_box',
        'dashboard',
        'normal',
        'default'
    );
}
add_action( 'admin_menu', 'meta_box' );

/* メインビジュアル編集フォーム */
function form1_box() {
?>
    <style>
        #mybox .input-text-wrap {
            margin-bottom: 12px;
        }
        #mybox label {
            display: inline-block;
            margin-bottom: 4px;
        }
        #mybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>
    <form id="mybox" action="" method="post">
        <div class="textarea-wrap">
            <label for="form1">メインビジュアルの説明を記入してください。</label>
            <textarea id="form1" name="mv_text" rows="5" placeholder="本文"><?php echo get_post_meta( 1, 'mv_text', true ); ?></textarea>
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="form1">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>
<?php
}

/* サークル情報編集フォーム */
function form2_box() {
    ?>
    <style>
        #mybox .input-text-wrap {
            margin-bottom: 12px;
        }
        #mybox label {
            display: inline-block;
            margin-bottom: 4px;
        }
        #mybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>
    <form id="mybox" action="" method="post">
        <div class="input-text-wrap">
            <label for="input1">サークル名</label>
            <input type="text" id="input1" name="circle_name" value="<?php echo get_post_meta( 1, 'circle_name', true ); ?>" placeholder="">
        </div>
        <div class="input-text-wrap">
            <label for="input2">人数</label>
            <input type="text" id="input2" name="members" value="<?php echo get_post_meta( 1, 'members', true ); ?>" placeholder="">
        </div>
        <div class="input-text-wrap">
            <label for="input3">代表者名</label>
            <input type="text" id="input3" name="representative_name" value="<?php echo get_post_meta( 1, 'representative_name', true ); ?>" placeholder="">
        </div>
        <div class="input-text-wrap">
            <label for="input4">設立年</label>
            <input type="text" id="input4" name="establish_year" value="<?php echo get_post_meta( 1, 'establish_year', true ); ?>" placeholder="">
        </div>
        <div class="textarea-wrap">
            <label for="input5">新歓情報</label>
            <textarea id="input5" name="welcom_party_info" rows="5" placeholder="本文"><?php echo get_post_meta( 1, 'welcom_party_info', true ); ?></textarea>
        </div>
        <div class="textarea-wrap">
            <label for="input6">入金方法</label>
            <textarea id="input6" name="whoto_payment" rows="5" placeholder="本文"><?php echo get_post_meta( 1, 'whoto_payment', true ); ?></textarea>
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="form2">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>
<?php
}

/* ギャラリー編集フォーム */
function form3_box() {
?>
    <style>
        #galleries {
            height: 350px;
            overflow-y: scroll;
        }
        img.gallery_img {
            width: 70%;
            height: auto;
        }
        div.imagebox {
            width: 75%;
            margin: 0 auto;
        }
        #gallerybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>

    <form id="gallerybox" action="" method="post">
        <div id="galleries">
            <?php
            $get_galleries =  maybe_unserialize( get_post_meta( 1, 'galleries', true ) ) ?: [];
            $args = array(
                'post_type' => 'attachment',
                'post_mime_type' => 'image',
                'post_status' => 'any',
                'posts_per_page' => -1
                );
            $attachments = get_posts( $args );
            foreach ( $attachments as $i => $data ) {
                // $data->ID, $data-guid
                ?>
                <div class="imagebox">
                    <input type="checkbox" id="<?php echo $i ?>" name="<?php echo "galleries[]" ?>"
                     value="<?php echo $data->ID ?>" <?php echo in_array( $data->ID, $get_galleries, false ) ? 'checked': '' ?>>
                    <label for="<?php echo $i ?>">
                        <img class="gallery_img" src="<?php echo $data->guid ?>">
                    </label>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="form3">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>

<?php
}

/* SNS編集フォーム */
function form4_box() {
    ?>
        <style>
            #mybox .input-text-wrap {
                margin-bottom: 12px;
            }
            #mybox label {
                display: inline-block;
                margin-bottom: 4px;
            }
            #mybox .submit {
                display: flex;
                width: 100%;
                justify-content: end;
            }
        </style>
        <form id="mybox" action="" method="post">
            <div class="input-text-wrap">
                <label for="instagram_id">Instagram ユーザー名</label>
                <input type="text" id="instagram_id" name="instagram_id" value="<?php echo get_post_meta( 1, 'instagram_id', true ); ?>">
            </div>
            <div class="input-text-wrap">
                <label for="twitter_id">Twitter ユーザー名</label>
                <input type="text" id="twitter_id" name="twitter_id" value="<?php echo get_post_meta( 1, 'twitter_id', true ); ?>">
            </div>
            <div class="input-text-wrap">
                <label for="line_">公式LINE ユーザー名</label>
                <input type="text" id="official_line_link" name="official_line_link" value="<?php echo get_post_meta( 1, 'line_link', true ); ?>">
            </div>
            <div class="submit">
                <input type="hidden" name="submit_type" value="form4">
                <input type="submit" class="button button-primary" value="保存する">
            </div>
        </form>
    <?php
    }
    
add_action( 'after_setup_theme', function() {
    // メインビジュアル説明編集フォーム
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'form1' ) {
        update_post_meta( 1, 'mv_text', $_POST['mv_text'] );
    }
    // インフォーメーション更新
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'form2' ) {
        update_post_meta( 1, 'circle_name',         $_POST['circle_name']         );
        update_post_meta( 1, 'members',             $_POST['members']             );
        update_post_meta( 1, 'representative_name', $_POST['representative_name'] );
        update_post_meta( 1, 'establish_year',      $_POST['establish_year']      );
        update_post_meta( 1, 'welcom_party_info',   $_POST['welcom_party_info']   );
        update_post_meta( 1, 'whoto_payment',       $_POST['whoto_payment']       );
    }
    // ギャラリー更新
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'form3' ) {
        if ( isset( $_POST['galleries'] ) )
            update_post_meta( 1, 'galleries', maybe_serialize( $_POST['galleries'] ) );
    }
    // SNS
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'form4' ) {
        update_post_meta( 1, 'instagram_id',     $_POST['instagram_id']     );
        update_post_meta( 1, 'twitter_id',       $_POST['twitter_id']       );
        update_post_meta( 1, 'official_line_id', $_POST['official_line_id'] );
    }
});

?>