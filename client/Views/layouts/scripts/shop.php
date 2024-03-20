<script src="<?= BASE_URL ?>public/assets/js/sticky_sidebar.min.js"></script>
<script src="<?= BASE_URL ?>public/assets/js/specific_listing.js"></script>

<script>
    const filterButton = document.querySelector('.filter__button');
    const resetButton = document.querySelector('.reset__button');
    let checkboxes = document.querySelectorAll('.category_checkbox');

    let btn_addToCart = document.querySelectorAll('.btn__addToCart');


    filterButton.addEventListener('click', (event) => {
        event.preventDefault();


        var selectedCategories = Array.from(checkboxes).filter(function(checkbox) {
            return checkbox.checked;
        }).map(function(checkbox) {
            return checkbox.value;
        });

        var categoryParam = selectedCategories.length > 0 ? 'category=' + selectedCategories.join(',') : '';
        var url = 'http://localhost/duan1/?act=shop';

        if (categoryParam !== '') {
            url += '&' + categoryParam;
        }

        window.location.href = url;

    })

    function addToCart(e, id, name, price, image, description, type, cName) {
        e.preventDefault();
        let idUser = "<?= $_SESSION['user']['id'] ?? '' ?>";
        $.ajax({
            type: "POST",
            url: "<?= BASE_URL . '?act=handleAddToCart' ?>",
            data: {
                idProduct: id,
                nameProduct: name,
                priceProduct: price,
                imageProduct: image,
                descriptionProduct: description,
                typeProduct: type,
                cName: cName,
                idUser: idUser
            },
            success: function(res) {
                $('.qty_cart').text(res.cartItemCount);
                toastr.success('Thêm vào giỏ hàng thành công 🛒');
            },
            error: function(xhr, status, error) {
                toastr.error('Có lỗi xảy ra. Vui lòng thử lại sau!');
            }
        })

    }
</script>