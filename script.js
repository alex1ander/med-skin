var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}



$( document ).ready(function() {
  
    $('.custom-select').each(function() {
      const _this = $(this),
          selectOption = _this.find('option'),
          selectOptionLength = selectOption.length,
          selectedOption = selectOption.filter(':selected'),
          duration = 450; // длительность анимации 
    
      _this.hide();
      _this.wrap('<div class="custom-select"></div>');
        $('<div>', {
            class: 'new-select' + (_this.hasClass('mt-4') ? ' mt-4' : ''), // Проверяем наличие класса mt-4 и добавляем его, если есть
            text: _this.children('option:disabled').text()
        }).insertAfter(_this);
    
      const selectHead = _this.next('.new-select');
      $('<div>', {
          class: 'new-select__list'
      }).insertAfter(selectHead);
    
      const selectList = selectHead.next('.new-select__list');
      for (let i = 1; i < selectOptionLength; i++) {
          $('<div>', {
              class: 'new-select__item',
              html: $('<span>', {
                  text: selectOption.eq(i).text()
              })
          })
          .attr('data-value', selectOption.eq(i).val())
          .appendTo(selectList);
      }
    
      const selectItem = selectList.find('.new-select__item');
      selectList.slideUp(0);
      selectHead.on('click', function() {
          if ( !$(this).hasClass('on') ) {
              $(this).addClass('on');
              selectList.slideDown(duration);
    
              selectItem.on('click', function() {
                  let chooseItem = $(this).data('value');
    
                  $('select.custom-select').val(chooseItem).attr('selected', 'selected');
                  selectHead.text( $(this).find('span').text() );
    
                  selectList.slideUp(duration);
                  selectHead.removeClass('on');
              });
    
          } else {
              $(this).removeClass('on');
              selectList.slideUp(duration);
          }
      });
    });

});