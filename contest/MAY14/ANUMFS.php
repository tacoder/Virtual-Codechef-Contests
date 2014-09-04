<?php require("../../includes/header.php"); ?><h1>The Malaysian Flight Search</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/ANUMFS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/ANUMFS.pdf">Russian</a>.</h3>
<h3>Problem description.</h3>
<p>Malaysia Airlines Flight MH370 disappeared on March 8th with 239 people aboard. After a lot of theories and extensive search, the Prime Minister of Malaysia declared that the flight was crashed in the Indian Ocean.</p>
<p>After gathering information, the area where the Black Box is present has been identified. The Black Box has a signal transmitter which responds to a special kind of signal.</p>
<p>We have search planes which can go to a particular location, and send the special kind of signal in all directions to a certain range. If the Black Box receives that signal, it will respond back.</p>
<p>As the location of crash is very far from nearest land and the cost to operate planes are high, Officials would like to minimize the total cost of this search operation. You are to write a program to help them</p>
<p>For the purpose of this problem, we consider 2-D coordinate system, forget about the depth of Indian Ocean and the following are true<br /></p>
<ul>
<li>We have many planes with us, each plane is defined by 3 variables (<b>I</b>, <b>R</b>, <b>C</b>). <b>I</b> is the unique id of the plane. <b>R</b> is the range it can transmit the special signal. <b>C</b> is the amount of Rupees (Yes, we are operating from India) required for one unit of travel.</li>
<li>All the planes are present at (0,0).</li>
<li>Same plane can be used any number of times.</li>
<li>All the distances we consider in this problem are Manhattan distance. Distance between (a,b) and (c,d) is <b>abs(a-c)+abs(b-d)</b>.</li>
<li>Given the plane id, and coordinates (x,y) from where it has to transmit the special signal, the plane moves from (0,0) to (x,y), transmits the signal, records the reply from Black Box if any, and returns to (0,0)</li>
<li>Cost of above operation would be sum of costs for (0,0) to (x,y) and (x,y) to (0,0), i.e, 2*(x+y)*C Rupees</li>
<li>Black Box at position (a,b) responds to special signal from a plane at (x,y) with range <b>r</b> if abs(a-x) + abs(b-y) &lt;= r</li>
<li>We always have a plane with <b>R = 0</b>.</li>
<li>The Black Box need not be present inside the search area. It is possible that the Officials got wrong search area. Note that the Black Box can still respond to special signals.</li>
</ul>
<p><br /></p>
<p>This is an Interactive Problem, you will be given details of all available planes, and description of area inside which the Black Box is expected to be present. You need to issue commands of the form (<b>I</b>, <b>x</b>, <b>y</b>) which means that you would like to send plane with id <b>I</b> to position (<b>x</b>, <b>y</b>) and give the special signal. The automated judge will respond with "yes" or "no", "yes" if the Black Box responded, "no" otherwise.</p>
<h3>Input</h3>
<p>First line of input contains <b>n</b>, the number of coordinate points that are present on the search area boundary.<br /><br />
Following <b>n</b> lines contain 2-D coordinates. Note that all the points on the boundary are given in the input. The boundary walls are always parallel to either of X-axis or Y-axis.<br /><br />
Next line of input contains <b>m</b>, the number of planes available.<br /><br />
Following <b>m</b> lines contains 2 integers <b>R</b> and <b>C</b>. Each plane is given Id in input order starting from 0. So the first plane has Id 0, and the last plane has Id <b>m-1</b>.</p>
<h3>Output</h3>
<p>To give a command, print 3 integers <b>I</b> <b>x</b> <b>y</b> as defined above.<br /><br />
To stop the search and report answer, print 3 integers <b>-1</b> <b>x</b> <b>y</b> where <b>(x,y)</b> is the location of the Malaysia Airlines Flight MH370<br /><br />
If the Flight is not present in the search area, print <b>-1 -1 -1</b>.</p>
<h3>Special</h3>
<p>Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.</p>
<p>For example, at C/C++ you could use the following routines:<br /></p>
<pre>
bool SendPlane(int id, int x, int y) {
    printf("%d %d %d\n", id, x, y);
    fflush(stdout);
    char temp[4];
    scanf("%s", temp);
    return temp[0]=='y';
}
</pre><p><br /><br /></p>
<h3>Sample Input/Output</h3>
<p><b>NOTE : This sample input/output does not follow constrains</b><br /></p>
<pre>
in: 4
in: 1 1
in: 1 2
in: 2 2
in: 2 1
in: 2
in: 0 100
in: 1 200
out: 0 1 1
in: no
out: 0 2 2
in: no
out: 0 1 2
in: yes
out: -1 1 2
</pre><p><b>Explanation</b><br /><br />
The search area is a square of unit lenght with bottom left corner at (1,1). The missing flight is located at (1,2).<br />
We took all the input. Then issued the plane 0 to go to (1, 1). Special judge returned "no". Finally we issued the plane 0 to go to (1, 2) and special judge gave "yes". So we found the missing flight. we then output the same by giving command "-1 1 2". Score will be 2*(1+1)*100 + 2*(2+2)*100 + 2*(1+2)*100 = 1800/4 = 450.<br /></p>
<h3>Constraints</h3>
<p><b>Search Area:</b><br /></p>
<ul>
<li><b>1000</b> ≤ <b>n</b> ≤ <b>5000</b></li>
<li>Distance from <b>(0,0)</b> to any point in the search area ≤ <b>100000</b></li>
<li><b>100000</b> ≤ Number of Integer Coordinate points inside the search area ≤ <b>200000</b></li>
<li>You can always enclose the whole search area in a 1024*1024 square</li>
<li>See test data generation for more details.</li>
</ul>
<p><br /><br />
<b>Planes:</b><br /></p>
<ul>
<li><b>40</b> ≤ <b>m</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>R</b> ≤ <b>600</b></li>
<li><b>100</b> ≤ <b>C</b> ≤ <b>10000</b></li>
</ul>
<h3>Test Data Generation</h3>
<p><b>Search Area:</b><br /><br />
Step 1 : A square of size 1000*1000 is taken, number of points inside are 10^6.<br /><br />
Step 2 : A rectangle of size <b>w*h</b> is taken such that <b>w</b> and <b>h</b> are less than 400. Now this rectangle is placed on some random boundary point of the initial square. All the points that fall into this rectangle are removed from initial set of points.<br /><br />
Step 3 : Step 2 is repeated until atmost 200000 points are left. Then it is continued until a random condition fails.<br /><br />
Step 4 : Now we are left with at most 200000 points. This points define the search area, but in input only the points that lie on boundary are given.<br /><br />
<b>Sample Graph : </b> <a href="http://www.codechef.com/download/ANUMFS.png">Click Here</a><br /><br /><br />
<b>Planes:</b><br /><br />
Refer constrains section for details about <b>m</b>, <b>R</b>, <b>C</b>. <b>m</b> and <b>C</b> are randomly chosen. Details about generation of <b>R</b> will not be disclosed.We always have a plane with <b>R = 0</b><br /><br /><br />
<b>Missing flight:</b><br /><br />
With 0.65 probability the flight is kept inside the search area.<br /><br />
Position is close to boundary points and is randomly chosen with probability 1 (always) given that it is <b>outside</b> the search area<br /></p>
<h3>Scoring</h3>
<p>For all the issued commands of the form <b>I x y</b>, <b>I</b> has to be valid id, <b>(x,y)</b> must be a coordinate point inside the search area (On the boundary points are also valid). Not satisfying this constrains will result in Wrong Answer.<br /><br />
For the command of the form <b>-1 x y</b>, If <b>(x,y)</b> is outside the search area, or there is no Flight at <b>(x,y)</b>, it will result in Wrong Answer.<br /><br />
For the command of the form <b>-1 -1 -1</b>, If the fligh is actually present inside the search area, it will result in Wrong Answer.<br /><br /></p>
<p>Let <b>Cost</b> be the total cost of the Search operation. Now score for that test file is <b>Cost/Number Of Coordinate points inside search area</b>. It will show as Wrong answer if <b>Cost</b> is greater than 4*10^12 or number of commands issued is greater than 5*10^5.</p>
<p><br /><br />
<b>EDITS MADE</b><br /><br />
<b>Old :</b>It will show as Wrong answer if <b>Cost</b> is greater than 10^9 or number of commands issued is greater than 5*10^5.<br /><br />
<b>New :</b>It will show as Wrong answer if <b>Cost</b> is greater than 4*10^12 or number of commands issued is greater than 5*10^5.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-03-2014</td>
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