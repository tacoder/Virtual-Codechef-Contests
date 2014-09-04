<?php require("../../includes/header.php"); ?><h1>Daily Train</h1><div class="content">

<p>A daily train consists of <b>N</b> cars. Let's consider one particular car. It has 54 places numbered consecutively from 1 to 54, some of which are already booked and some are still free. The places are numbered in the following fashion:<br />
<img src="http://www.codechef.com/download/daily.jpg" width="100%" />
</p>
<p>The car is separated into 9 compartments of 6 places each, as shown in the picture. So, the 1st compartment consists of places 1, 2, 3, 4, 53 and 54, the 2nd compartment consists of places 5, 6, 7, 8, 51 and 52, and so on.</p>
<p>A group of <b>X</b> friends wants to buy tickets for free places, all of which are in one compartment (it's much funnier to travel together). You are given the information about free and booked places in each of the <b>N</b> cars. Find the number of ways to sell the friends exactly <b>X</b> tickets in one compartment (note that the order in which the tickets are sold doesn't matter).</p>
<h3>Input</h3>

<p>The first line of the input contains two integers <b>X</b> and <b>N</b> (1 ≤ <b>X</b> ≤ 6, 1 ≤ <b>N</b> ≤ 10) separated by a single space. Each of the following <b>N</b> lines contains the information about one car which is a string of length 54 consisting of '0' and '1'. The <b>i</b>-th character (numbered from 1) is '0' if place <b>i</b> in the corresponding car is free, and is '1' if place <b>i</b> is already booked.</p>
<h3>Output</h3>

<p>Output just one integer -- the requested number of ways.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1 3
100101110000001011000001111110010011110010010111000101
001010000000101111100000000000000111101010101111111010
011110011110000001010100101110001011111010001001111010

<b>Output:</b>
85

<b>Input:</b>
6 3
100101110000001011000001111110010011110010010111000101
001010000000101111100000000000000111101010101111111010
011110011110000001010100101110001011111010001001111010

<b>Output:</b>
1

<b>Input:</b>
3 2
000000000000000000000000000000000000000000000000000000
000000000000000000000000000000000000000000000000000000

<b>Output:</b>
360

<b>Explanation:</b>
</pre><p>In the first test case, any of the free places can be sold. In the second test case, the only free compartment in the train is compartment 3 in the first car (places 9, 10, 11, 12, 49 and 50 are all free). In the third test case, the train is still absolutely free; as there are 20 ways to sell 3 tickets in an empty compartment, the answer is 2 * 9 * 20 = 360.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>