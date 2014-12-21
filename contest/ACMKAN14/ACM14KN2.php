<?php require("../../includes/header.php"); ?><h1>Solving the Practice Contest</h1><div class="content">
<p>As we all know that team LaZyProblemSetters with participants V, J and K is gearing up for ICPC 2015, and have decided to solve a problem set to practice for the prelims round. The day of that practice round has now arrived and they are very eager to get started. </p>
<p>They have picked up an ordered set of <b>N</b> problems to solve. Now, since they are newbies in the field<br />
of programming, they have chosen problems which are not so tough.</p>
<p>Hence, every problem that they have taken is solvable by all the three members.
</p>
<p>
To make it feel like the regional contest, they have decided to use only a single computer system.Since they are newbies, instead of optimizing on time and resources they have come up with the following plan to decide on how they would attempt to solve the problems.<br />
<br /></p>
<ol>
<li> They have divided their total time in <b>N</b> time slots.</li>
<li> In the i<sup>th</sup> time slot, they will code up the i<sup>th</sup> problem. Since they are easy problems, it is known that each problem would be solved within the given time slot.</li>
<li> In each time slot, the computer will be allotted to either V, J or K. They will not share the computer with anyone else in the time slot allocated to them.</li>
</ol>

<p>
Now all that is left is to decide who will solve which problem on the computer. To make things easier, all of them have listed their requirements on how the distribution of the problems should be.<br />
<br /></p>
<ol>
<li>K being a lover of the number <b>k</b> has decided that the total number of problems coded by him will be a multiple of <b>k</b>.</li>
<li>J being a busy guy decided to never code problems in consecutive slots. In the gaps between his slots, he has some other work that he wants to finish.</li>
<li>V being a relatively new coder, wants to code at least one problem from the whole set.</li>
</ol>

<p>
Your task is to find out the number of ways in which they can distribute the problems amongst themselves.
</p>
<h3>Input</h3>
<p>First line of the input will contain an integer <b>T</b>, the number of test cases to follow.<br />
Next <b>T</b> lines follow. Each line will represent a test case containing two space separated integers <b>N</b> and <b>k</b>.
</p>
<h3>Output</h3>
<p>For each input, print the number of ways in which V, J and K can distribute the problems amongst themselves in a new line.<br />
Since, it can be a very large number, output it modulo 10000007.</p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> ≤ <b>k</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b></li>
<li>The constraint on <b>T</b> can be computed from below.</li>
</ul>
<h3>Test Data Generation</h3>
<p>The value of <b>T</b> in an input file is determined by the following rule:</p>
<p>For an input file, we keep an integer variable <i>total</i> (initialized to 0). <br /><br />
For each test case in the input file, we take the value of k in the test case and update <i>total</i><br />
as follows:<br />
<br /></p>
<ul>
<li> if k &gt; 0, <i>total</i> = <i>total</i> + k </li>
<li> if k == 0, <i>total</i> = <i>total</i> + 1 </li>
</ul>
<p>Now, it is guaranteed that for each input file, the value of <i>total</i> as computed above will never exceed <b>500</b>.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 0
2 1
3 1

<b>Output:</b>
3
5
17
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>