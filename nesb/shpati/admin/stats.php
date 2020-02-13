<div class="statsContainer">
                <div class="statsDiv">
                    <h4>Totals...</h4>
                    <ul>
                        <li>Total income this year: <span style="background-color: darkkhaki;padding: 7px;border-radius: 8px;">$<?php echo yearIncome(); ?></span></li>
                        <li>Total income this month: <span style="background-color: darkkhaki;padding: 7px;border-radius: 8px;">$<?php echo monthIncome(); ?></span></li>
                    </ul>
                </div>
                <div class="statsDiv statsBx2 col-2">
                    <div class="smallDivStyles">
                        <h5>Total Sales</h5>
                        <h5><?php echo totalSales(); ?></h5>
                    </div>
                    <div class="smallDivStyles">
                        <h5>New Orders</h5>
                        <h5><?php echo unfinishedOrder() ?></h5>
                    </div>
                    <div class="smallDivStyles">
                        <h5>....</h5>
                        <h5>......</h5>
                    </div>
                    <div class="smallDivStyles">
                        <h5>...</h5>
                        <h5>......</h5>
                    </div>
                </div>
                <div class="statsDiv statsBx3">
                    <h4>Top 3 Products of 2019</h4>
                    <ol>
                        <li>
                            <h5>After Bath</h5>
                        </li>
                        <li>
                            <h5>16oz Raw Shea Butter</h5>
                        </li>
                        <li>
                            <h5>Black Soap Bars</h5>
                        </li>
                    </ol>
                </div>
            </div>
            <br>
            <div class="statsContainer2">
                <div class="statsDiv statsBx4">
                    <h5>Recent Orders</h5>

                    <div class="col-3">
                        <div><h5 style="font-weight: 600; text-decoration: underline; font-size: 16px;">Customer Email</h5></div>
                        <div><h5 style="font-weight: 600; text-decoration: underline; font-size: 16px;">Order Total</h5></div>
                        <div><h5 style="font-weight: 600; text-decoration: underline; font-size: 16px;">Order Date</h5></div>
                    </div>

                    <?php recentOrders(); ?>

                    <div class="col-3">
                        <div><h5>example@example.com</h5></div>
                        <div><h5>$67.82</h5></div>
                        <div><h5>12/12/2019</h5></div>
                    </div>
                    <div class="col-3">
                        <div><h5>example@example.com</h5></div>
                        <div><h5>$67.82</h5></div>
                        <div><h5>12/12/2019</h5></div>
                    </div>
                    <div class="col-3">
                        <div><h5>example@example.com</h5></div>
                        <div><h5>$67.82</h5></div>
                        <div><h5>12/12/2019</h5></div>
                    </div>

                </div>
            </div>