<?php require("../../includes/header.php"); ?><h1>Snakes and Ladders</h1><div class="content">

<p>Akshay as a child was immensely in love with the board game Snakes and Ladders. As he grew up he designed a game of his own based on the same lines. The game rules that he framed were somewhat like this :</p>
<p><br />1. You start from the initial position ie the first square<br />
<br />2. At each step you have two choices<br />
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. move to next square<br />
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. take the ladder/snake if available at the square<br />
<br />3. The ladders/snakes are only unidirectional</p>
<p><br />4. There are no ladders from one square to its next consecutive one and no 2 ladders or snake has same start and end coordinates.</p>
<p><br />5. The game is played via a fixed no. of coupons that a player gets at the beginning of the game. </p>
<p><br />6. The objective is to reach the finishing square as well as finishing all the given k coupons</p>
<p><br />7. The player forfeits a coupon for each step that he takes.</p>
<p>For a given configuration of the Board Game and K coupuns, Akshay wants to find out the number of different possible ways to complete the game successfully. Help Akshay solve his dilemma.</p>
<h3>Input</h3>
<p>The first line will contain a single integer d , the size of each side of the square board. Next line will contain l,the number of snakes and ladder in the board . Following l lines will contain 2 integer ai and bi each . Denoting their is ladder from ai to bi if bi > ai or a snake from ai to bi if ai > bi</p>
<p>The last line will contain k , the number of coupons.</p>
<h3>Output</h3>
<p>output will contain a single integer denoting the number of different ways possible ( modulo 1000000007 )</p>
<h3>Constraints:</h3>
<p>1&lt;=d&lt;=10<br />
<br />l&lt;=35<br />
<br />1&lt;=ai&lt;=d^2<br />
<br />1&lt;=bi&lt;=d^2<br />
<br />ai!=bi<br />
<br />ai+1!=bi<br />
<br />1&lt;=k&lt;=10000000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
2 4
2


<b>Output:</b>
1
</pre><p>
<br/></br/></p>
<h3>Explanation of input</h3>
<p>first number 2 means board is of size 2X2 . There is one ladder starting from 2 and end 4 and you can reach the last square ie 4 in 2 steps in only 1 way.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rahulsingal14">rahulsingal14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>