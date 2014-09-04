<?php require("../../includes/header.php"); ?><h1>Packing Candies</h1><div class="content">

<p>It’s Halloween. Papa Smurf has received a lot of orders of candies. One day, while packing candies, he counted number of different ways he can pack candies in a box. Two ways are different if there exists a candy type for which its count in resulting boxes is different. Box has a property that they can contain only a fixed number of candies, neither less nor more.</p>
<p>If Papa has three types for candies <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, <b>S<sub>3</sub></b> and three boxes (<b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, <b>B<sub>3</sub></b>), and he has to pack 6 candies in each box. Suppose he pack candies in a way that box has configuration <b>B<sub>1</sub></b>{<b>S<sub>1</sub></b> = 1, <b>S<sub>2</sub></b> = 0, <b>S<sub>3</sub></b> = 5},  <b>B<sub>2</sub></b>(<b>S<sub>1</sub></b> = 1, <b>S<sub>2</sub></b><sub> </sub>= 3, <b>S<sub>3</sub></b> = 2) and <b>B<sub>3</sub></b>(<b>S<sub>1</sub></b> = 1, <b>S<sub>2</sub></b> = 0, <b>S<sub>3</sub></b> = 5), then Box B<sub>1</sub> and B<sub>2</sub> are said to have different configuration, while Box B<sub>1</sub> and B<sub>3</sub> are same.</p>
<p>But wait, there are some candies of which Smurfs are very fond of. So they gave you a list of such candies and the minimum number for each candy they want in their box. If a candy is not in this list, then Papa can pack any number (including zero) of this type of candy. </p>
<p>Now help Papa in counting different number of ways he can pack candies in a box. Papa has infinite supply of each type of candies.</p>
<h3>Input</h3>
<p>First line of input contain three integers, <b>N M K</b>, number of candies to be packed in a box, number of types of candies Papa had and length of candy's list which Smurfs give to him respectively. Then follow <b>K</b> lines. In each lines there are two integers, <b>S<sub>i</sub> X<sub>i</sub></b>, type of candy and minimum number of candy he has to put in each box (1 ≤ <b>i</b> ≤ <b>M</b>).</p>
<h3>Output</h3>
<p>Find number of different ways Papa can pack candies in a box. As this number can be very large print <b>answer modulo 1000000007 (10^9 + 7)</b>.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 1000000</p>
<p>1 ≤ <b>M</b> ≤ 1000000</p>
<p>0 ≤ <b>K</b> ≤ <b>M</b></p>
<p>1 ≤ <b>S<sub>i</sub></b> ≤ <b>M</b></p>
<p>1 ≤ <b>X<sub>i</sub></b> ≤ <b>1000000</b></p>
<h3>Example</h3>
<pre>
<b>Input #0:</b>
4 2 1
1 2

<b>Output #0:</b>
3

<b>Input #1:</b>
5 3 2
1 2
2 1

<b>Output #1:</b>
6

<b>Input #2:</b>
5 1 1
3 6

<b>Output #2:</b>
0

</pre><h3>Explanation</h3>
<p><b>Explanation for Sample Input #0:</b></p>
<p>Papa has to pack 4 candies in a box, and he has two types of candies (S<sub>1</sub>, S<sub>2</sub>). This particular Smurf has mentioned that the box must have at least 2 candy of candy type #1. Then there are 3 number of ways of packing candies, represented by (S<sub>1</sub> = 2, S<sub>2</sub> = 2), (S<sub>1</sub> = 3, S<sub>2</sub> = 1), (S<sub>1</sub> = 4, S<sub>2</sub> = 0).</p>
<p><b>Explanation for Sample Input #2:</b></p>
<p>Papa has to pack 5 candies in a box, while according to list he has to pack at least 6 candies of candy type 3. And it is not possible.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kumarvimal">kumarvimal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>