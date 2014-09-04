<?php require("../../includes/header.php"); ?><h1>A Walk to Remember</h1><div class="content">

<p>Pratik has built a line follower bot. A line follower is essentially a robot which can follow a white line and the participant is graded based upon how effectively his robot performs the task at hand. Pratik decided to enter a Robotics contest to see how his bot fared over the others. The contest however had another small task that the bot was required to perform.
</p><p>
The arena on which the robot was to be judged was a small 2-D matrix or grid with a black background and the lines of the grid were either red or white in color. The white lines formed a closed path, i.e. it always ended at the starting point, and no two white lines intersected. The robot was required to follow only the white lines and count the number of squares enclosed within this area. Pratik noticed red dots at the intersection of any two lines. These red dots were the corners of the squares in the grid. Pratik realized that his bot could still win the contest if he can write an extra piece of code which takes in the directions followed by his bot as input and calculates the number of squares enclosed. He reconfigured his bot such that it reported the direction in which it was travelling as and when it detected a red dot. So the input from the robot was of the form North, South, East, West. The dots were unit length apart. Help Pratik win this contest by figuring out an algorithm which takes in these sequence of steps and gives out the total area enclosed within this path.  </p>
<h3>Input</h3>
<p>The first line of input contains 'T', the number of test cases (1&lt;=T&lt;=1000). This is followed by 'T' test cases. Each test case consists of one line containing a string (of length upto 100000) which is the sequence of steps ('N', 'S', 'E' or 'W') taken.</p>
<h3>Output</h3>
<p>The output should consist of 'T' lines corresponding to the 'T' test cases. Each line should contain one number, which is the area enclosed by the walk.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
ENWS
ENWWSSEN
NENESSWSSWWNEN


<b>Output:</b>
1
3
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikn5">karthikn5</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
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