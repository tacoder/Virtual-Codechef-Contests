<?php require("../../includes/header.php"); ?><h1>Berry Tough Distribution</h1><div class="content">

<p>Smurf forest has <b>V</b> varieties of berries and there are <b>S<sub>i</sub></b> number of berries belonging to each variety <b>i</b>(1 &lt;=<b> i </b>&lt;= <b>V</b>) collected by Smurfs. Berries belonging to a particular variety are all kept in the same box, i.e. berries of variety <b>S<sub>i</sub></b> are kept in box <b>i</b>'th box.</p>
<p>Smurfs consists of <b>M</b> family members and the berries collected by the family have to be <b>distributed equally</b> in terms of quantity of berries to each family member. (Family members do not mind getting berries of any variety if quantity of berries received by each member is same). Papa Smurf has assigned the job of berry distribution to Brainy.</p>
<p>Brainy wants to select those boxes, such that when berries from these boxes put together can be evenly distributed among each family members. Remember all family members must receive same number of berries and each berry can belong to any variety. If there are multiple ways then Brainy will proceed such that the number of box selected is maximized. Even though multiple answers exists, then he will choose those boxes whose sum of berries is maximized.
</p>
<p>Help Brainy write a program which calculates the maximum distributable variety set of boxes that brings maximum profit (maximum berries) to Brainy. </p>
<h3>Input</h3>
<p>The first line of the input contains a single number: the number of test cases(&lt;= 20) to follow. Each test case has the following format:</p>
<p> One line with two space-separated integers <b>V</b> <b>M</b>, (1 &lt;= <b>V</b> &lt;= 500 and 1 &lt;= <b>M</b> &lt;= 1000): the total number of varieties and the family size respectively.</p>
<p> One line with <b>V</b> space-separated integers <b>S<sub>1</sub> S<sub>2</sub> ... S<sub>v</sub></b> satisfying 1 &lt;= <b>S<sub>i</sub> </b>&lt;= 100, 000: the number of berries that belong to a variety <b>i</b>(1 &lt;= <b>i</b> &lt;= <b>V</b>).</p>
<h3>Output</h3>
<p>For each test case output a single line containing 2 space-separated integers- <b>K</b> , the maximum number of box Brainy chooses and <b>D</b>, the number of berries each member of the family gets. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
<p>
2
3 5
1 8 6
5 8
1 6 2 9 5</p><b>Output:</b>
<p>
3 3
3 2</p>
</pre><h3>Explanation</h3>
<p>In first test case Brainy picks all the varieties of berries as 15 sweets would be equally distributable among the family members.</p>
<p>In second case Brainy has 3 choices of selecting maximum variety of sweets.( There are 3 ways of selecting 3 sweets).</p>
<p>1.    1 6 9 </p>
<p>2.    2 5 9</p>
<p>3.   1 2 5</p>
<p>Brainy would prefer to go with the first the first or second choice because that would be more profitable for him as the <b>overall number of sweets distributed is maximized</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kumarvimal">kumarvimal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2012</td>
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