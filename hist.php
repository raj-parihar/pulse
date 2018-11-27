<div class="chart-wrap">
  <div class="chart-title">
    Categories
  </div>
  <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
    <div class="row">
      <span class="label">Cat 1</span>
      <div class="bar-wrap">
        <div class="bar" data-value="62"></div>
      </div>
      <span class="number">62</span>
    </div>
    <div class="row">
      <span class="label">Cat 2</span>
      <div class="bar-wrap">
        <div class="bar" data-value="35"></div>
      </div>
      <span class="number">35</span>
    </div>
    <div class="row">
      <span class="label">Cat 3</span>
      <div class="bar-wrap">
        <div class="bar" data-value="18"></div>
      </div>
      <span class="number">18</span>
    </div>
    <div class="row">
      <span class="label">Cat 4</span>
      <div class="bar-wrap">
        <div class="bar" data-value="13"></div>
      </div>
      <span class="number">13</span>
    </div>
    <div class="row">
      <span class="label">Cat 5</span>
      <div class="bar-wrap">
        <div class="bar" data-value="8"></div>
      </div>
      <span class="number">8</span>
    </div>
    <div class="row">
      <span class="label">Cat 6</span>
      <div class="bar-wrap">
        <div class="bar" data-value="5"></div>
      </div>
      <span class="number">5</span>
    </div>
    <div class="row">
      <span class="label">Cat 7</span>
      <div class="bar-wrap">
        <div class="bar" data-value="2"></div>
      </div>
      <span class="number">2</span>
    </div>
  </div>
</div>


/* Regular Styles */
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body {
  font-family: 'Open Sans', sans-serif;
  color: #4e555f;
  font-size: 14px;
}

/* Bar Delays Animation Function */
.barDelays (@index, @moredelay, @amount) when (@index<(@amount+1)){
  @multi:(@index*200ms);
  @delay:@multi+@moredelay;

  .row:nth-of-type(@{index}) {
    .bar {
      transition: 1s @delay;
    }
  }

  .barDelays(@index+1, @moredelay, @amount);
}

/* Chart Styles */
@label-width: 150px;
@number-width: 30px;
@bar-height: 26px;


.chart-wrap {
  max-width: 900px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid #eeeeee;

  .chart-title {
    margin-bottom: 10px;
    font-size: 16px;
    text-align: center;
    text-transform: uppercase;
  }

  .row {
    position: relative;
    height: @bar-height;
    margin-bottom: 15px;
  }

  .bar-wrap {
    position: relative;
    background: rgb(215, 219, 222);
    width: 100%;
    height: 100%;
    overflow: hidden;

    .bar {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      background: rgb(243, 113, 103);
      transition: all 1s;
      transform: translateX(-100%);

      &.in {
        transform: translateX(0%);
      }
    }
  }

  // Generate Bar Delays
  .barDelays(1, 200ms, 7);

  .label {
    position: absolute;
    top: 0;
    left: 0;
    width: @label-width;
    padding-left: 10px;
    text-align: left;
    font-size: 12px;
    line-height: @bar-height;
    text-transform: uppercase;
    font-weight: bold;
    z-index: 10;
  }

  .number {
    position: absolute;
    top: 0;
    right: 0;
    width: @number-width;
    padding-right: 10px;
    font-size: 18px;
    line-height: @bar-height;
    font-weight: bold;
    text-align: right;
    z-index: 10;
  }

  @media screen and (min-width:800px) {
    .row {
      padding: 0 (@number-width + 10px) 0 (@label-width + 10px);
    }
    .label {
      text-align: right;
      padding-left: 0;
    }
    .number {
      text-align: left;
      padding-right: 0;
    }
  }
}


(function($) {
  function generateBarGraph(wrapper) {
    // Set Up Values Array
    var values = [];

    // Get Values and save to Array
    $(wrapper + ' .bar').each(function(index, el) {
      values.push($(this).data('value'));
    });

    // Get Max Value From Array
    var max_value = Math.max.apply(Math, values);

    // Set width of bar to percent of max value
    $(wrapper + ' .bar').each(function(index, el) {
      var bar = $(this),
          value = bar.data('value'),
          percent = Math.ceil((value / max_value) * 100);

      // Set Width & Add Class
      bar.width(percent + '%');
      bar.addClass('in');
    });
  }

  // Generate the bar graph on window load...
  $(window).on('load', function(event) {
    generateBarGraph('#dashboard-stats');
  });
})(jQuery); // Fully reference jQuery after this point.
