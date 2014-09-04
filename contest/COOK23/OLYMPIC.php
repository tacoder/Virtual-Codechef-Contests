<?php require("../../includes/header.php"); ?><h1>Gifts at Olympics</h1><div class="content">

<p align="justify">
The Olympic Games, world's foremost sports competition,<br />
will be hosted by London next month.<br />
Tens of thousands of participants from over 200 nations will be participating this year.<br />
Each game has only 3 winners, so the organizers have decided to give special chocolate gift pack to each participant.</p>
<p align="justify">
A huge number of chocolates have just arrived from <b>N</b> different villages, numbered 1 to <b>N</b>.<br />
The organizers have decided the number of chocolates to be given to each participant.<br />
This is given in <b>count</b>, where <b>count</b>[<i>i</i>] is the number of chocolates from <i>i</i><sup>th</sup> village,<br />
to be placed in each gift pack.<br />
Now they need to order boxes for these chocolates.<br />
A box of size <b>S</b> can store at most <b>S</b> chocolates.<br />
A gift pack is made as follows.</p>
<p align="justify">
Each of the <b>N</b> villages is assigned a unique colored box<br />
and chocolates from a village are placed only in boxes assigned to it.<br />
The organizers always want to minimize the number of boxes in each gift pack.<br />
E.g., for given <b>N</b> = 3 villages and <b>count</b> = {3, 12, 7}, suppose colors assigned are <i>A</i>, <i>B</i>, <i>C</i>.<br />
If size of each box is <b>S</b> = 4, then we need 1 box of color A, 3 boxes of color B and 2 boxes of color C.<br />
All the boxes for a gift pack are then packed in a row using transparent wrapper.<br />
So in the above example, a gift pack can be "<i>ABBBCC</i>" or "<i>ABCBCB</i>" etc.</p>
<p align="justify">
To make everyone feel special, no two participants are given same gift packs.<br />
Two gift packs are different if and only if they have the different order of colored boxes, even in reverse order.<br />
For example "<i>ABBBCC</i>" is same as "<i>ABBBCC</i>" and also same as "<i>CCBBBA</i>".<br />
Given <b>Q</b> queries, each specifying the size of a box <b>S</b>,<br />
find the total number of different gift packs possible if we use boxes of size <b>S</b> each.<br />
Output the result modulo 1000000007 (10<sup>9</sup>+7).</p>
<h3>Input</h3>
<p align="justify">The first line has an integer <b>N</b>. The second line has the array <b>count</b>, <b>N</b> space separated integers.<br />
The next line has integer <b>Q</b>, followed by <b>Q</b> lines, each having an integer size <b>S</b>.<br/><br/><br />
1 &le; <b>N</b>, <b>count</b>[<i>i</i>], <b>Q</b> &le; 100000 (10<sup>5</sup>)<br/><br />
1 &le; sum of all <b>count</b>[<i>i</i>] &le; 100000 (10<sup>5</sup>)<br/><br />
1 &le; <b>S</b> &le; 1000000000 (10<sup>9</sup>)<br/><br/></br/></br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p align="justify">Output <b>Q</b> lines, one for each query,<br />
the total number of different gift packs possible, using boxes of size <b>S</b>, specified in that query modulo 1000000007 (10<sup>9</sup>+7).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 3 12
4
4
5
2
12

<b>Output:</b>
30
10
2320
3
</pre><p><br/><br/><br />
<b>Explanation:</b><br/><br />
In the last query, size of each box <b>S</b> = 12.<br/><br/><br />
Suppose the colors assigned to the 3 villages are <i>A</i>, <i>B</i>, <i>C</i> respectively,<br />
we need 1 box of each color. <br/><br/><br />
Only 3 different gift packs can be made. They are "<i>ABC</i>", "<i>ACB</i>", "<i>BAC</i>".<br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-06-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>